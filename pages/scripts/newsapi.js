const apiKey = "1a60d877067e4c39b26aafe56cfe6097"



async function getNews(key) {
    return fetch(`https://newsapi.org/v2/top-headlines?country=us&apiKey=${key}`)
        .then(response => response.json())
        .then(data => {
            return data;
        })
}


async function parseNews() {
    const array = await getNews(apiKey);
    const articles = array.articles;
    articles.forEach(article => {
        titleGenerator(article.title);
    })
    // console.log(articles[0].title, articles[0].author, articles[0].description)
}

parseNews(apiKey);


function titleGenerator(title){
    const news = document.getElementById('news');

    const div = document.createElement('div');
 
    div.style.cssText = "height: 20%; display: flex; justify-content: center; margin-bottom:15%; "


    const h1 = document.createElement('h1');
    h1.style.cssText = " height: 100%; width: 50%; display:block; text-align:center;"
    h1.textContent = title;
    
    div.appendChild(h1);
    news.appendChild(div);
}