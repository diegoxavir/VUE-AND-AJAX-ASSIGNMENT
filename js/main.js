const app = Vue.createApp({
    data() {
        return {
            movies: [],
            selectedMovie: null,
            loading: false,
            error: null,
            windowWidth: window.innerWidth,
        };
    },

    created() {
        this.fetchAllMovies();
    },

    mounted() {
        window.addEventListener('resize', this.updateWindowWidth);
    },

    beforeUnmount() {
        window.removeEventListener('resize', this.updateWindowWidth);
    },

    methods: {
        updateWindowWidth() {
            this.windowWidth = window.innerWidth;
        },
        scrollToMovieInfo() {
            const movieInfo = this.$refs.movieInfo;
            if (movieInfo) {
                movieInfo.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        },
        fetchAllMovies() {
            fetch('http://localhost/ghibli-lumen/public/movies')
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
            fetch(`http://localhost/ghibli-lumen/public/movies/${id}`)
                .then(response => response.json())
                .then(data => {
                    this.selectedMovie = data;
                    this.loading = false;
                    this.scrollToMovieInfo();
                })
                .catch(error => {
                    this.error = "Failed to fetch movie info.";
                    console.error('Error fetching movie info:', error);
                    this.loading = false;
                });
        },
    }
}).mount("#app");
