<div>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" wire:submit.prevent="submit">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleFirstName" placeholder="Name" wire:model.live="name">

                                        @error('name')
                                            <font color="red">{{ $message }}</font>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" wire:model.live="email">
                                    @error('email')
                                        <font color="red">{{ $message }}</font>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" wire:model="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password"
                                            wire:model="password_confirmation">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Register Account
                                </button>
                                <hr>
                                <a href="{{ route('login') }}" wire:navigate> Login</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@script
    <script>
        $wire.on('register-success', () => {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "ลงทะเบียนสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
@endscript
