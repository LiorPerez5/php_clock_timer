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
        console.log(i_Mins);
        let hours;
        let mins;
        let secs;
        // if for hours 
        if (i_Mins >= 60) {
            hours = Math.floor(i_Mins / 60);
            mins = i_Mins % 60;
            secs = (hours * 60 * 60) + (mins * 60)
            console.log(`${hours}:${mins}`);
        } else {
            // if for min 
            mins = i_Mins
            secs = mins * 60
            }
        startTimer(secs * 1000)
    }

    function startTimer(i_Secs) {
        let counter = 0;
        let hourCounter = 0;
        let hours = Math.floor(i_Secs / 1000 / 60 / 60);
        let mins = Math.floor(i_Secs / 1000 / 60) - (hours * 60) - 1;
        let secs = i_Secs
        let secsToDisplay = 60;
        let myInterval = setInterval(function() {
            // counter++;
            secs -= 1000;
            secsToDisplay--
            if (secs == 0) {
                console.log("Stopped test git ");
                clearInterval(myInterval);

            }
            if(secsToDisplay == 0 && mins > 0){
                secsToDisplay = 60;
                mins--;
            }
            if(mins == 0){
                secsToDisplay = 60;
                secsToDisplay--;
            }
          
               
                if (mins == 0 && hours > 0) {
                    hours--;
                }
            


            displaytimer(secsToDisplay, mins, hours);
        }, 200);
    }

    function displaytimer(i_Secs, i_Mins, i_Hours) {
        console.log(`${i_Hours} : ${i_Mins} : ${i_Secs}`);
        // let mins = i_Secs * 60
        // if (mins >= 60) {
        //     let hours = Math.floor(mins / 60);
        //     let mins = mins % 60;
        //     secs = mins / 1000
        //     console.log(`${hours}:${mins}`);
        // } else  if(i_Secs >= 60000) {
        //     // if for min
        //     mins = i_Secs / 1000 

        // }
        let hourString
        let minString
        let secString
        if (i_Hours < 10) {
            hourString = `0${i_Hours}`
        }
        if (i_Mins < 10) {
            minString = `0${i_Mins}`
        }
        if (i_Secs < 10) {
            secString = `0${i_Secs}`
        }

        jQuery('.countdown').html(`${hourString} : ${minString} : ${secString}`);
    }
    jQuery(document).ready(function() {
        jQuery('#timer form').on('click', '#submit', function(e) {

            e.preventDefault();
            countdown(jQuery('#user-time').val());

        })
    })
</script>