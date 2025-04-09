const app = Vue.createApp({
    created(){
        //to get remote data in create lifecycle hook
        fetch('http://localhost/lumen/public/books')
        .then(response => response.json())
        .then(data => {
            this.booksData = data;
            console.log(this.booksData);
            this.loadingBooks = false;
        })
        .catch(error => console.error(error))
    },
    data(){
        return{
            booksData:[],
            loadingBooks: true,
            loading: false,
            editionCount:"",
            authorName:"",
            firstPublishedYear:"",
            error:""
        }
    },
    methods:{
        getBook(whichBook){
           // console.log(whichBook);
           this.loading = true;
           this.editionCount = "";
           this.firstPublishedYear = "";
           this.authorName = "";
           this.error = false;


            const title = whichBook;
            const convertedTitle = title.split(' ').join('+');
           // console.log(convertedTitle);


            fetch(`https://openlibrary.org/search.json?q=${convertedTitle}`)
            .then(response => response.json())
            .then(data => {
                //console.log(data.docs[0]);
                if(data.docs.length > 0) {
                    this.loading = false;
                    const book = data.docs[0];
                    this.editionCount = book.edition_count ? book.edition_count : "Not Available";
                    this.firstPublishedYear = book.first_publish_year ? book.first_publish_year : "Not Available";
                    this.authorName = book.author_name ? book.author_name[0] : "Not Available";
                }else{
                    this.error = "no book found with query"
                }
            })
           .catch(error => console.error(error));
        }
    }
               
}).mount("#app");

