new Vue({
    el: '#comment',
    data() {
      return {
        comments: [],
        comment: {
          product_id: null,
          content: '',
        },
        count: 2,
        isInvalid: false,
      }
    },
    mounted() {
        this.comment.product_id = parseInt(this.$refs.product_id.value);
        axios.get('/comment-product/' + this.comment.product_id)
            .then(response => (this.comments = response.data))
            .catch(error => {
                toastr.error(error.response.data.message);
            });
    },
    computed: {
        commentss() {
            return this.comments.filter((comment, index) => {
                return index < this.count;
            });
        }
    },
    watch: {
        'comment.content'() {
            if (this.comment.content !== '') {
                this.isInvalid = false;
            }
        }
    },
    methods: {
        submitComment() {
            if (this.comment.content !== '') {
                axios.post('/comment-product', this.comment)
                .then(response => {
                    this.comments.unshift(response.data.comment);
                    this.comment.content = '';
                    toastr.success(response.data.message);
                })
                .catch(error => {
                    if (error.response.status === 405) {
                        window.location.href = '/login';
                        toastr.error(error.response.data.message);
                    } else {
                        toastr.error(error.response.data.message);
                    }
                });
            } else {
                this.$refs.message.focus();
                this.isInvalid = true;
            }
        },
        loadMore() {
            this.count += 2;
        }
    },
});
