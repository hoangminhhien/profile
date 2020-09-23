<div id="activity" class="card class-border" style="border: none;">
  <div class="card-body">
    <strong style="font-size: 20px">
      Nhật ký hoạt động
    </strong>
    <button type="button" class="btn btn-link" v-on:click="addActivity">
      <i class="fa fa-plus" aria-hidden="true" style="cursor: pointer;"></i>
    </button>
    <hr style="border: 1px solid black">
    <div class="row" v-for="(activity, indexActivity) in listActivity">
      <div class="col-md-3">
        <input type="text" class="form-control dateActivity">
      </div>
      <div class="col-md-7">
        <div class="form-group row">
          <label class="col-md-4 col-form-label font-weight-bold">Đơn vị tổ chức</label>
          <div class="col-md-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 col-form-label font-weight-bold">Địa chỉ</label>
          <div class="col-md-8">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 col-form-label font-weight-bold">Giới thiệu chương trình</label>
          <div class="col-md-8">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="col showImageActivity">
            <img src="{{ asset('image/upload.jpg') }}" style="width: 10%; cursor: pointer;">
            <div style="display: none;">
              <input type="file" name="" class="uploadImageActivity">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-danger" v-on:click="removeActivity(indexActivity)">
          <i class="fa fa-minus" aria-hidden="true"></i> Xóa
        </button>
      </div>
      <hr style="border: 1px dashed black; width: 100%">
    </div>
  </div>
</div>
<script type="text/javascript">
  new Vue({
        el: '#activity',
        data() {
            return {
            	listActivity: []
            }
        },
        methods:{
        	addActivity() {
        		console.log(1111111)
        		this.listActivity.push({

                        date: null,
                        name_shool: null,
                        specialized: null,
                        classification: 0,
                    })
            },
            removeActivity(indexActivity) {
            	console.log(this.listActivity, indexActivity)
                if (confirm('Bạn muốn xóa phần này?')) {
                	console.log(indexActivity)

                    this.listActivity.splice(indexActivity, 1)
                }

            },
        }
    })
</script>