let circularProgress = document.querySelector(".circular-progress"),
    progressValue = document.querySelector(".progress-value");

let currentChapter = 1,    
    totalChapters = document.querySelectorAll("ul li").length,
    progressStartValue = 0,    
    progressEndValue = 100,    
    speed = 50;

let progress = setInterval(() => {
  progressStartValue += 1;

  progressValue.textContent = `${progressStartValue}%`
  circularProgress.style.background = `conic-gradient(#7d2ae8 ${progressStartValue * 3.6}deg, #ededed 0deg)`

  if(progressStartValue >= ((currentChapter / totalChapters) * 100)){
    currentChapter++;
  }

  if(progressStartValue == progressEndValue){
    clearInterval(progress);
  }    
}, speed);
