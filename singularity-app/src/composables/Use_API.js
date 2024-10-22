import {api} from 'boot/axios'
export default function Use_API(url){
    const getById=async(id)=>{
        try{
         const {data}=await api.get(`${url}/${id}`)
         return data
        }catch(e){
            console.log("erro com api",e.message)
        }
    }
    const list=async()=>{
        try{
         const {data}=await api.get(url)
         return data
        }catch(e){
            console.log("erro com api",e.message)
        }
    }
    const post=async(form)=>{
        try{
         const {data}=await api.post(url,form)
         return data
        }catch(e){
            console.log("erro com api mrthod post",e.message)
        }
    }
    const update=async(form)=>{
        try{
         const {data}=await api.put(`${url}/${form.id}`,form)
         return data
        }catch(e){
            console.log("erro com api mrthod post",e.message)
        }
    }
    const remove=async(id)=>{
        try{
         const {data}=await api.delete(`${url}/${id}`)
         return data
        }catch(e){
            console.log("erro com api mrthod post",e.message)
        }
    }
    return{
        list,
        remove,
        update,
        post,
        getById
    }
}