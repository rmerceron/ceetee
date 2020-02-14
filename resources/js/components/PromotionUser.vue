<template>
    <div>
        <div v-for="promotion in promotions">
            <div v-show="promotion.startDate <= currentDate && promotion.endDate >= currentDate">
                <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                    <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                        <div class="w-full md:w-2/3 rounded-t">
                            <img v-bind:src="promotion.image" class="h-full w-full shadow">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg"><br>
                                <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{{promotion.type.libelle}}</p>
                                <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6"><b>DU</b> {{formatDate(promotion.startDate)}} <b>AU</b> {{formatDate(promotion.endDate)}}</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">{{promotion.title}}</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">{{promotion.description}}<br><br></p>
                                <p class="text-gray-600 text-xs md:text-sm pt-6 px-6">{{promotion.limit}} UTILISATION</p>
                            </div>

                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="inline-flex float-right">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="viewQRcode(promotion.id)">
                                        Scanner la promotion
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
            </div>
            <div v-show="promotions.length === 0">
                <br><h3>Ce commerce ne propose aucunes promotions pour le moment</h3><br>
            </div>
        </div>
        <div v-show="promotions.length === 0">
            <br><h3>Ce commerce ne propose aucunes promotions pour le moment</h3><br>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';



    export default {
        name: "PromotionCard",
        props: [
            'promotions',
        ],
        data() {
            return {
                currentDate: moment(new Date()).format('YYYY-MM-DD'),

            }
        },
        methods: {
            formatDate: function (date) {
                return moment(date, 'YYYY-MM-DD').format('DD/ MM');
            },
            viewQRcode: function (promoId) {
                window.location.href = 'scanqr/' + promoId
            },
        }
    }
</script>

<style scoped>

</style>
