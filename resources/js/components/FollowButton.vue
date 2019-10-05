<template>
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8">-->
<!--                <div class="card">-->
<!--                    <div class="card-header">Example Component</div>-->

<!--                    <div class="card-body">-->
<!--                        I'm an example component.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId','follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return {
                status: this.follows,
            }

        },

        methods: {
            followUser(){
                // alert('inside');
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;
                       // alert(response.data);
                       console.log(response.data);
                    })
                    .catch(errors => {
                        if( errors.response.status === 401 ){
                            window.location = '/login';
                        }
                    });
            }
        },
        computed: {
            buttonText(){
                return (this.status) ? 'Unfollow' : 'Follow'
            }
        }
    }

</script>
