const app = Vue.createApp({
    data() {
        return {
            movies: [],
            selectedMovie: null,
            loading: false,
            error: null,
        };
    },

    created() {
        this.fetchAllMovies();
    },

    methods: {
        fetchAllMovies() {
            fetch('http://localhost:8000/movies')
                .then(response => response.json())
                .then(data => {
                    this.movies = data;
                })
                .catch(error => {
                    this.error = "Failed to fetch movies.";
                    console.error('Error fetching all movies:', error);
                });
        },

        getMovie(id) {
            this.loading = true;
            fetch(`http://localhost:8000/movies/${id}`)
                .then(response => response.json())
                .then(data => {
                    this.selectedMovie = data;
                    this.loading = false;
                })
                .catch(error => {
                    this.error = "Failed to fetch movie info.";
                    console.error('Error fetching movie info:', error);
                    this.loading = false;
                });
        }
    }
}).mount("#app");

