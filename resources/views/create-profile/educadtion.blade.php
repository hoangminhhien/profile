<div id="eduction" class="card class-border" style="border: none;">
  <div class="card-body">
    <strong style="font-size: 20px">
      Học vấn
    </strong>
    <button type="button" class="btn btn-link" v-on:click="addEducation">
      <i class="fa fa-plus" aria-hidden="true" style="cursor: pointer;"></i>
    </button>
    <hr style="border: 1px solid black">
    <div class="row" v-for="(eduction, indexEduction) in listEduction">
      <div class="col-md-3">
        <input type="text" class="form-control dateEducation">
      </div>
      <div class="col-md-7">
        <div class="form-group row">
          <label class="col-md-4 col-form-label font-weight-bold">Tên trường</label>
          <div class="col-md-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 col-form-label font-weight-bold">Tên chuyên ngành</label>
          <div class="col-md-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 col-form-label font-weight-bold">Xếp loại</label>
          <div class="col-md-8">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-danger" v-on:click="removeEducation(indexEduction)">
          <i class="fa fa-minus" aria-hidden="true"></i> Xóa
        </button>
      </div>
      <hr style="border: 1px dashed black; width: 100%">
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript">
  new Vue({
        el: '#eduction',
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