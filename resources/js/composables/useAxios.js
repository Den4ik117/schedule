import axios from 'axios'

export const useAxios = () => {
    const instance = axios.create()
    
    return instance
}