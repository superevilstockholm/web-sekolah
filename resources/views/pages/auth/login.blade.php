@extends('App')
@section('title', 'Login')
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <form id="loginForm">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" id="btnLogin">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            const token = localStorage.getItem('auth_token');
            if (token) {
                try {
                    const response = await axios.get('/api/is-logged-in', {headers: {'Authorization': `Bearer ${token}`}});
                    if (response.status === 200 && response.data.status === true) {
                        window.location.href = "/dashboard";
                    }
                } catch {
                    localStorage.removeItem('auth_token');
                }
            }
        });
        document.getElementById('loginForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            let btn = document.getElementById("btnLogin");
            btn.disabled = true;
            btn.innerText = "Loading...";
            const formData = {
                email: document.getElementById("email").value,
                password: document.getElementById("password").value
            };
            try {
                let response = await axios.post('/api/login', formData, {
                    headers: {
                        'Accept': 'application/json'
                    }
                });
                let data = response.data;
                Swal.fire({
                    icon: 'success',
                    title: 'Login Success!',
                    text: `Welcome ${data.data.user.name}`,
                    timer: 2000,
                    showConfirmButton: false
                });
                localStorage.setItem("auth_token", data.data.token);
                setTimeout(() => {
                    window.location.href = "/dashboard";
                }, 2000);

            } catch (error) {
                let msg = error.response?.data?.error || "Something went wrong";
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: msg,
                });
            } finally {
                btn.disabled = false;
                btn.innerText = "Login";
            }
        });
    </script>
@endsection
