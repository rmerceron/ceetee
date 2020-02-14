<template>
    <div>
        <div v-show="tradershops.length === 0">
            <br><h3>Vous n'avez ancun favoris !</h3><br>
            <div class="inline-flex float-right">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="viewShops">
                    Voir les commerces
                </button>
            </div>
            <br>
            <br>
        </div>
        <div v-for="usershop in tradershops">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" v-bind:src="usershop.shop.image">
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <button class="form-check" @click="deleteFavory(usershop.id)">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="h-6 w-6 fill-current text-yellow-500"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </button>
                        <div class="inline-flex float-right">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-bind:id="usershop.shop.id" @click="viewPromo(usershop.shop.id)">
                                Voir les promotions
                            </button>
                        </div><br>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{usershop.shop.category.libelle}}</span>
                        <div class="text-gray-900 font-bold text-xl mb-2">{{usershop.shop.corporateName}}</div>
                        <p class="text-gray-700 text-base">{{usershop.shop.description}}</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 rounded-full mr-4 fill-current text-grey-darker" viewBox="0 0 20 20"><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">{{usershop.shop.address.number}} {{usershop.shop.address.libelle}} {{usershop.shop.address.additionalAddress}}, {{usershop.shop.address.city}} {{usershop.shop.address.postalCode}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShopUser",
        props: [
            'tradershops',

        ],
        methods: {
            viewShops: function (){
                window.location.href = '/';
            },
            viewPromo: function (shopId) {
                window.location.href = 'promotion/' + shopId
            },
            deleteFavory(id) {
                axios.delete('/dashboard/'+ id).then(function () {
                    window.location.reload();
                });
            },
        },
    }
</script>

<style scoped>

</style>
