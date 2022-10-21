　　
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app" class="p-3">
    <h1 class="mb-3">レビュー（星＆コメント)</h1>
    <table class="table table-bordered mt-4">
        <thead class="bg-info text-white">
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>レビュー</th>
        </tr>
        </thead>
        <tbody>
        <!-- 商品データをリスト表示・・・ ① -->
        <tr v-for="p in posts">
            <td v-text="p.id"></td>
            <td v-text="p.title"></td>
            <td>
                <a href="#" type="button" v-if="!hasMyReview(p.reviews)" @click.prevent="openReviewForm(p.id)">
                    レビューを投稿
                </a>
                <!-- レビューをリスト表示 ・・・ ② -->
                <div v-for="r in p.reviews">
                    <div class="p-3 bg-light mt-2">
                        <span class="font-weight-bold" v-text="r.user.name"></span>
                        <v-star :value="r.stars"></v-star>
                        <div class="text-break mt-1" style="white-space:pre;" v-text="r.comment"></div>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- レビュー投稿のモーダル ・・・ ③ -->
    <div class="modal fade" id="review-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="review-modalLabel">&#x1F4AC; レビューの投稿</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h4>スター</h4>
                        <div v-for="star in [5,4,3,2,1]">
                            <input v-model="reviewParams.stars" type="radio" :value="star">
                            <v-star :value="star"></v-star>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>コメント</h4>
                        <textarea class="form-control" v-model="reviewParams.comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link mr-2" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-warning" @click="onSubmit">登録する</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>

    //　星を表示するコンポーネント ・・・ ④
    Vue.component('v-star', {
        props: ['value'],
        template: '<span><span v-for="number in parseInt(value)">&#x2B50;</span></span>'
    });

    new Vue({
        el: '#app',
        data: {
            userId: parseInt('<?php echo e(auth()->user()->id ?? -1); ?>'), // ログイン・ユーザーID ・・・ ⑤
            posts: [],
            reviewParams: {
                post_id: '',
                stars: '',
                comment: ''
            }
        },
        methods: {
            getPosts() {

                axios.get('/post/list')
                    .then(response => {

                        this.posts = response.data;

                    });

            },
            openReviewForm(postId) {

                this.reviewParams = {
                    post_id: postId,
                    stars: '',
                    comment: ''
                };
                $('#review-modal').modal('show');

            },
            hasMyReview(reviews) { // すでに投稿済みかどうかのチェック ・・・ ⑥

                for(let review of reviews) {

                    if(this.userId === parseInt(review.user_id)) {

                        return true;

                    }

                }

                return false;

            },
            onSubmit(productId) {

                axios.post('/product/review', this.reviewParams)
                    .then(response => {

                        if(response.data.result === true) {

                            this.getPosts();
                            $('#review-modal').modal('hide');

                        }

                    })
                    .catch(error => {

                        // エラー処理
                        alert('入力内容が正しくありません。');
                        console.log(error);

                    });

            }
        },
        mounted() {

            this.getPosts();

        }
    });

</script>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/review.blade.php ENDPATH**/ ?>