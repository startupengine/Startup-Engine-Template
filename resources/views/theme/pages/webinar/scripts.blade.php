<script>
    $( document ).ready(function() {
        $(".navbar-brand").fadeIn();
        $(".page-header-image").fadeIn();
        $("#title").delay(250).fadeIn();
        $("#subtitle").delay(250).fadeIn();
        $("#emailFormContent").delay(250).fadeIn();
        $("#content").delay(450).fadeIn();
        $("#CTA").delay(550).fadeIn();
        $(".navbar-collapse").remove();
        $(".navbar-toggler").remove();
    });

    Vue.use(VeeValidate);

    new Vue({
        el: '#emailForm',
        methods: {
            submitForm(res){
                this.$validator.validateAll().then(res=>{
                    if(res) {
                        //alert('Form successfully submitted!')
                        //$('#successModal').modal();
                        $('#emailForm').hide();
                        $('#emailSuccess').fadeIn();
                        var email = $('#s').val();
                        signupEvent('webcast signup', email, {webinar:'example'});
                        console.log('signup successful')
                    } else {
                        signupEvent('webcast signup failure', email, {webinar:'example', validation:'failed'});
                        console.log('validation failed');
                    }
                })
            }
        },
        computed: {
            isFormDirty() {
                return Object.keys(this.fields).some(key => this.fields[key].dirty);
            }
        }
    });

    function signupEvent(type, email, data){
        $.get('/api/analytics/event', { event_type: type,  <?php if(\Auth::user()) { $user = \Auth::user(); echo "user_id:$user->id, user_name:'$user->name',"; } ?> user_email:email, data:data }, function(data) { });
        return false; // prevent default
    }
</script>