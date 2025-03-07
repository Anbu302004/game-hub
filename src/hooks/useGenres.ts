import { useState, useEffect } from "react";

interface Genre {
    id: number;
    name: string;
}

interface FetchGenresResponse {
    count: number;
    results: Genre[];
}

const useGenres = () => {
    const [genres, setGenres] = useState<Genre[]>([]);
    const [error, setError] = useState("");
    const [isLoading, setLoading] = useState(false);

    useEffect(() => {
        const controller = new AbortController();
        setLoading(true);

        fetch("/genres", { signal: controller.signal })
            .then(async (res) => {
                if (!res.ok) throw new Error("Failed to fetch genres");
                const data: FetchGenresResponse = await res.json();
                setGenres(data.results);
            })
            .catch((err) => {
                if (err.name === "AbortError") return;
                setError(err.message);
            })
            .finally(() => setLoading(false));

        return () => controller.abort();
    }, []);

    return { genres, error, isLoading };
};

export default useGenres;
