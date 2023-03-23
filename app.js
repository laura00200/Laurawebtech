const timeleft = document.getElementById('time-left')

const event1 = new Date("2023-02-14")

const second = 1000
const minute = second * 60
const hour = minute * 60
const day = hour * 24 // miliseconds



function countDown() {
    const today = new Date()
    console.log(today)
    console.log(event1)
    const timeSpan = event1 - today
    console.log(timeSpan)
    
    if(timeSpan <= -day)
    {
        timeleft.innerHTML ="Hope you liked the event!"
        clearInterval(timerId) 
        return
    }
    if(timeSpan <= 0){
       timeleft.innerHTML = "The Event ended!"
       clearInterval(timerId) 
       return
    }
    const days= Math.floor (timeSpan / day)
    
    const hours= Math.floor ((timeSpan % day) / hour)
    
    const minutes= Math.floor ((timeSpan % hour) / minute)
   
    const seconds= Math.floor ((timeSpan % minute) / second)
    
    timeleft.innerHTML= days + ' DAYS: ' + hours + ' HOURS: ' + minutes + ' MIN: ' + seconds + ' SECONDS'
   
}

const timerId= setInterval(countDown, second)
setInterval (countDown, second)
console.log(event1)


