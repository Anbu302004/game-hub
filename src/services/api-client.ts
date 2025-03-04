import axios from "axios";

export default axios.create({
    baseURL: 'https://api.rawg.io/api/',
    params: {
        key: 'fe1e97c3dcd848ebad8bb3354ec84d78'
    }
})