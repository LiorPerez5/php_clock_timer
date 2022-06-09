<div class="hide" data-attribute-hide="true" id="timer">
    <h1>
        Timer
    </h1>
    <form method="post">
        <input type="number" name="inputnumber" id="user-time" />
        <input type="submit" value="Submit" id="submit" />
    </form>

    <div class="countdown"></div>
</div>

<script type="text/javascript">
    function countdown(i_Mins) {
        let mins;
        let secs;
        mins = i_Mins;
        secs = mins * 60;
        startTimer(secs * 1000);
    }

    function startTimer(i_MiliSeconds) {
        let mins = Math.floor(i_MiliSeconds / 1000 / 60);
        let i_Secs = i_MiliSeconds/1000;
        console.log(mins, i_Secs, i_MiliSeconds);
        let myInterval = setInterval(function() {
        let minCount = mins -1; 
        let secCount = i_Secs;
        
        i_Secs --;
        if(i_Secs == -1){
            console.log("STOPPED");
            clearInterval(myInterval);
        }
    
            displaytimer(secCount);
    }, 100);
}


    function displaytimer(i_Secs) {
        console.log(`${i_Secs}`);
        
        let secString
        
        
        if (i_Secs < 10) {
            secString = `0${i_Secs}`
        }else{
            secString = `${i_Secs}`
        }

        jQuery('.countdown').html(`${secString}`);
    }
    jQuery(document).ready(function() {
        jQuery('#timer form').on('click', '#submit', function(e) {

            e.preventDefault();
            countdown(jQuery('#user-time').val());

        })
    })
</script>