function resolveAfter2Seconds(){
    return new Promise(resolve=>{
        setTimeout(() => {
            resolve('resolved');
        }, 1000);
    })
}

async function asyncCall(){
    console.log('synchronous call!');
    let response = await resolveAfter2Seconds();
    if(response){
        console.log('response have been arived!');
    }
}

// asyncCall();


async function asyncFetch(){
    const response = await fetch('https://dummyjson.com/products/1');
    const responseJson = await response.json();
    console.log('response is: ', responseJson);
}



// Example usage of fetch with async/await
async function fetchData() {
    try {
      const response = await fetch('https://api.example.com/data');
      
      if (!response.ok) {
        throw new Error('Request failed');
      }
      
      const data = await response.json();
      console.log('Data received:', data);
      // Process the received data here
    } catch (error) {
      console.error('Error:', error);
    }
  }
  
  // Call the async function
  fetchData();
  