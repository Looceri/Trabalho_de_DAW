<template>
    <div class="container">
        <div class="flex">
            <div class="flex-f" >
                <q-card>
                    <q-card-section>
                        <div align="center">
                            <img src="../../assets/icons/google.svg" alt="" class="avatar">
                        </div>
                        <div class="text-h6" align="center">Google Inc</div>
                        <div class="text-subtitle2" align="center" style="color: grey; font-size: 16px;">1M seguidores
                        </div>
                    </q-card-section>

                   

                    <q-card-section >
                        <div align="center">
                            <button class="btn">
                                Seguir
                            </button>
                        </div>
                
                       
                     </q-card-section>
                </q-card>
            </div>
            <div class="flex-f">
                <q-card>
                    <q-card-section>
                        <div align="center">
                            <img src="src/assets/icons/6664154.jpg" alt="" class="avatar">
                        </div>

                        <div class="text-h6" align="center">Apple inc</div>
                        <div class="text-subtitle2" align="center" style="color: grey; font-size: 16px;">2M seguidores</div>
                    </q-card-section>

                    

                    <q-card-section>
                        <div align="center">
                            <button class="btn">
                                Seguir
                            </button>
                        </div>
                    </q-card-section>
                </q-card>
            </div>
        </div>
        <div class="flex">
            <div class="flex-f" >
                <q-card>
                    <q-card-section>
                        <div align="center">
                            <img src="../../assets/icons/google.svg" alt="" class="avatar">
                        </div>
                        <div class="text-h6" align="center">Google Inc</div>
                        <div class="text-subtitle2" align="center" style="color: grey; font-size: 16px;">1M seguidores
                        </div>
                    </q-card-section>

                   

                    <q-card-section >
                        <div align="center">
                            <button class="btn">
                                Seguir
                            </button>
                        </div>
                
                       
                     </q-card-section>
                </q-card>
            </div>
            <div class="flex-f">
                <q-card>
                    <q-card-section>
                        <div align="center">
                            <img src="../../assets/ilustrations/message_sent.svg" alt="" class="avatar">
                        </div>

                        <div class="text-h6" align="center">Apple inc</div>
                        <div class="text-subtitle2" align="center" style="color: grey; font-size: 16px;">2M seguidores</div>
                    </q-card-section>

                    

                    <q-card-section>
                        <div align="center">
                            <button class="btn">
                                Seguir
                            </button>
                        </div>
                    </q-card-section>
                </q-card>
            </div>
        </div>
        <div class="flex">
            <div class="flex-f" >
                <q-card>
                    <q-card-section>
                        <div align="center">
                            <img src="../../assets/ilustrations/message_sent_sucessfuly.svg" alt="" class="avatar">
                        </div>
                        <div class="text-h6" align="center">Singularity Inc</div>
                        <div class="text-subtitle2" align="center" style="color: grey; font-size: 16px;">1M seguidores
                        </div>
                    </q-card-section>

                   

                    <q-card-section >
                        <div align="center">
                            <button class="btn">
                                Seguir
                            </button>
                        </div>
                
                       
                     </q-card-section>
                </q-card>
            </div>
            <div class="flex-f">
                <q-card>
                    <q-card-section>
                        <div align="center">
                            <img src="../../assets/Group67.svg" alt="" class="avatar">
                        </div>

                        <div class="text-h6" align="center">Apple inc</div>
                        <div class="text-subtitle2" align="center" style="color: grey; font-size: 16px;">2M seguidores</div>
                    </q-card-section>

                    

                    <q-card-section>
                        <div align="center">
                            <button class="btn">
                                Seguir
                            </button>
                        </div>
                    </q-card-section>
                </q-card>
            </div>
        </div>
    </div>

  
</template>

<script>
export default {
    data() {
        return {
            model: null
        };
    }
};
</script>

<style>
.container {
    margin-top: 20px;
    overflow: auto;
    height: 100%;
    padding: 10px;
}
.flex{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
}
.flex-f{
    width: 48%;
    margin-right: 2px;
    max-height: 400px;
}

.btn {
    color: rgb(45, 45, 240);
    background-color: white;
    width: 100px;
    border-color: rgb(45, 45, 240);
    border-radius: 20px;
    align-items: center;
padding: 5px;
}

.avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid white;
    margin: 10px;
}
</style>