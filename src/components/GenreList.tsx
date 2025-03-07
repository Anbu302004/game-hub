import React from "react";
import useGenres from "../hooks/useGenres";

const GenreList = () => {
    const { genres, error, isLoading } = useGenres();

    if (isLoading) return <p>Loading genres...</p>;
    if (error) return <p>Error: {error}</p>;

    return (
        <ul>
            {genres.map((genre) => (
                <li key={genre.id}>{genre.name}</li>
            ))}
        </ul>
    );
};

export default GenreList;
