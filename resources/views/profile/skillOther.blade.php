<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<div id="skill" class="card class-border" style="border: none;">
	<div class="card-body">
		<strong style="font-size: 20px">
			Thêm kĩ năng khác
		</strong>
		<button type="button" class="btn btn-link" v-on:click="addSkill">
			<i class="fa fa-plus" aria-hidden="true" style="cursor: pointer;" ></i>
		</button>
		<hr style="border: 1px solid black">
        <div class="form-group row" v-for="(skill, indexSkill) in listSkill">
            <div class="col-md-3">
                <input type="text" name="" class="form-control font-weight-bold" placeholder="Nhập tên kĩ năng">
            </div> 
            <div class="col-md-6">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger" v-on:click="removeSkill(indexSkill)">
                    <i class="fa fa-minus" aria-hidden="true"></i> Xóa
                </button>
            </div>
        </div>
	</div>
</div>
<script type="text/javascript">
	new Vue({
        el: '#skill',
        data() {
            return {
            	listSkill: []
            }
        },
        methods:{
        	addSkill() {
        		this.listSkill.push({
                        skill: null,
                        desction: null
                    })
            },
            removeSkill(indexSkill) {
                if (confirm('Bạn muốn xóa phần này?')) {
                	console.log(indexSkill)
                    this.listSkill.splice(indexSkill, 1)
                }

            },
        }
    })
</script>