<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            let channel = Echo.channel('user-channel');

            channel.listen('.UserEvent',function (data) {
                alert('new user created!!!!!!!!!!!!!!!');
                console.log( "param : " + data);
                console.log( "data : " + Array.from(data));
                console.log( "user : " + data.user);
                console.log( "user id : " + data.user._id);
                console.log( "user name : " + data.user.name);
                // console.log(data._id+" data");

                console.log('///////////////////////////////');

            });

        }
    }
</script>
