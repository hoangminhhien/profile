<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<div id="skill" class="card class-border" style="border: none;">
	<div class="card-body">
		<strong style="font-size: 20px">
			Kĩ năng
		</strong>
		<button type="button" class="btn btn-link" v-on:click="addEducation">
			<i class="fa fa-plus" aria-hidden="true" style="cursor: pointer;" ></i>
		</button>
		<hr style="border: 1px solid black">
		<div class="form-group row">
            <label class="col-md-3 col-form-label font-weight-bold">Ngôn ngữ</label>
            <div class="col-md-9">
                <input type="text" name="" class="form-control">
            </div>
        </div>
	</div>
</div>
<script type="text/javascript">
	new Vue({
        el: '#skill',
        data() {
            return {
            	listEduction: []
            }
        },
        methods:{
        	addEducation() {
        		console.log(1111111)
        		this.listEduction.push({

                        date: null,
                        name_shool: null,
                        specialized: null,
                        classification: 0,
                    })
            },
            removeEducation(indexEduction) {
            	console.log(this.listEduction, indexEduction)
                if (confirm('Bạn muốn xóa phần này?')) {
                	console.log(indexEduction)

                    this.listEduction.splice(indexEduction, 1)
                }

            },
        }
    })
</script>