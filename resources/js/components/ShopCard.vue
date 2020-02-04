<template>
    <div>
        <div v-for="shop in shops">
            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <!--Lead Card-->
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
    <!--                <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">-->
                        <div class="w-full md:w-2/3 rounded-t">
                            <img v-bind:src="shop.image" class="h-full w-full shadow">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{{shop.category.libelle}}</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">{{shop.corporateName}}</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">{{shop.description}}<br><br></p>
                            </div>

                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 rounded-full mr-4 fill-current text-grey-darker" viewBox="0 0 20 20"><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                    <p class="text-gray-600 text-xs md:text-sm">{{shop.address.number}} {{shop.address.libelle}} {{shop.address.additionalAddress}}, {{shop.address.city}} {{shop.address.postalCode}}</p>
                                </div>
                            </div>
                        </div>

    <!--                </a>-->
                </div>
                <!--/Lead Card-->
            </div>
            <br>
<!--            <div class="max-w-sm w-full lg:max-w-full lg:flex">-->
<!--                <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" v-bind:src="shop.image">-->
<!--                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">-->
<!--                    <div class="mb-8">-->
<!--                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{shop.category.libelle}}</span>-->
<!--                        <div class="text-gray-900 font-bold text-xl mb-2">{{shop.corporateName}}</div>-->
<!--                        <p class="text-gray-700 text-base">{{shop.description}}</p>-->
<!--                    </div>-->
<!--                    <div class="flex items-center">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 rounded-full mr-4 fill-current text-grey-darker" viewBox="0 0 20 20"><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>-->
<!--                        <div class="text-sm">-->
<!--                            <p class="text-gray-900 leading-none">{{shop.address.number}} {{shop.address.libelle}} {{shop.address.additionalAddress}}, {{shop.address.city}} {{shop.address.postalCode}}</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShopCard",
        props: [
            'shops',
        ],
    }
</script>

<style scoped>

</style>
