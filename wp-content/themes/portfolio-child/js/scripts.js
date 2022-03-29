
function read_time_increment() {
    //check to see if element exists in the dom
    var elem = !!document.querySelector('#readTime');
    // if it does I use the intersectionObserver API to increment the duration of minutes it takes to read the blog post 
    if(elem) {
        // callback function
          let incrementReadTime = (entries, observer) => {
            entries.forEach(entry => {
              if(entry.isIntersecting){
                  var startTime = 0;
                  function increaseReadTime() {
                      let readTarget = entry.target.dataset.time;
                      if(startTime < readTarget) {
                          startTime++;
                          entry.target.innerText = startTime;
                      } else {
                          observer.unobserve(entry.target);
                      }
                    }
                    // use setInterval to increment the number ever 100 miliseconds
                setInterval(increaseReadTime,100);
              }
            });
          };  
          let options = {
            threshold: 0.5
          }
        // create intersection observer object
          let observer = new IntersectionObserver(incrementReadTime, options);    
          var read = document.querySelector('#readTime');
            observer.observe(read);  
            
    }
}

read_time_increment();