<template>
    <div>
        <div class="text-gray-900 font-bold text-xl mb-2" v-if="usershops === null">Vous n'avez pas de commerces</div>
        <div v-else v-for="usershop in usershops">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" v-bind:src="usershop.shop.image">
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="inline-flex float-right">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-l" v-bind:id="usershop.shop.id" @click="viewPromo($event)">
                                Voir mes promotions
                            </button>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r" v-bind:id="usershop.shop.id" @click="createPromo($event)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-white" viewBox="0 0 20 20"><path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/></svg>
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
        name: "ShopTrader",
        props: [
            'usershops',

        ],
        methods: {
            viewPromo: function (event) {
                window.location.href = 'promotion/'+ event.currentTarget.id
            },
            createPromo: function (event) {
                window.location.href = 'createPromotion/'+ event.currentTarget.id
            },
        }
    }
</script>

<style scoped>

</style>
