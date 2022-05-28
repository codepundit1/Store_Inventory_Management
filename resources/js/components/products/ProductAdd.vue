<template>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Create Products</h5>
        </div>
        <div class="card-body">
            <!-- form start -->
            <form role="form" action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            id="name"
                            placeholder="Enter product Name"
                        />
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
