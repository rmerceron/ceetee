<template>
    <div class="card-body">
        <form method="POST" @submit.prevent="submitPromo">
            <div class="form-group row">
                <label for="promotionType" class="col-md-4 col-form-label text-md-right">Type de promotion</label>
                <div class="col-md-6">
                    <select id="promotionType" name="promotionType" class="form-control" v-model="promo.promotionType">
                        <option value="1">Information</option>
                        <option value="2">Offre</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Titre</label>
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" v-model="promo.title" required autocomplete="title" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                <div class="col-md-6">
                    <textarea id="description" type="text" class="form-control" name="description" v-model="promo.description" required autocomplete="description" autofocus></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="startDate" class="col-md-4 col-form-label text-md-right">Date de début</label>
                <div class="col-md-6">
                    <input id="startDate" type="date" class="form-control" name="startDate" v-model="promo.startDate" required autocomplete="startDate" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="endDate" class="col-md-4 col-form-label text-md-right">Date de fin</label>
                <div class="col-md-6">
                    <input id="endDate" type="date" class="form-control" name="endDate" v-model="promo.endDate" required autocomplete="endDate" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="limit" class="col-md-4 col-form-label text-md-right">Limite d'utilisations</label>
                <div class="col-md-6">
                    <input id="limit" type="number" class="form-control" name="limit" v-model="promo.limit" required autocomplete="limit" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                <div class="col-md-6">
                    <input id="image" type="file" name="image" @change="handleFileUpload" required autocomplete="image" autofocus>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Ajouter
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "CreatePromotion",
        props: [
            'shopselected',
        ],
        data() {
            return {
                promo: {},
                file: '',
            }
        },
        methods: {
            handleFileUpload(){
                this.file = this.$refs.file.files[0];
            },
            submitPromo(){
                axios.post('/createPromotion/'+ this.shopselected, this.promo , this.file).then(function (response) {
                    window.location = response.data.redirect;
                });
            },
        }
    }
</script>

<style scoped>

</style>
