import Use_API from "src/composables/Use_API";
export default function AccountService(){
    const{ list,post,update,remove,getById}=Use_API('user')

    return{
        list,
        post,
        update,
        remove,
        getById
    }
    
}