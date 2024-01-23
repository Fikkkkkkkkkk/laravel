<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-4" style="width: 800px;">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="John " required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Primary Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="compName" class="form-label">Company Name</label>
                            <input type="text" name="compName" class="form-control" id="compName" required>
                        </div>
                        <div class="mb-3">
                            <label for="currentJob" class="form-label">Which of the following best matches or describes your current job title?</label>
                            <input type="text" name="currentJob" class="form-control" id="currentJob" required>
                        </div>
                        <div class="mb-3">
                            <label for="yearBorn" class="form-label">What year were you born?</label>
                            <input type="date" name="yearBorn" class="form-control" id="yearBorn" required>
                        </div>
                        <div class="mb-3">
                            <label for="fulltimeExp" class="form-label">How many total years of full-time work experience do you currently have?</label>
                            <input type="number" name="fulltimeExp" class="form-control" id="fulltimeExp" value="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="ExpData" class="form-label">How many years of experience do you have involve in data analysis project that last over 4 weeks?</label>
                            <input type="number" name="ExpData" class="form-control" id="ExpData" value="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="descBigdata" class="form-label">Which best describes how you view big data as it relates to your career?</label>
                            <input type="text" name="descBigdata" class="form-control" id="descBigdata" required>
                        </div>
                        <div class="mb-3">
                            <label for="orgFocus" class="form-label">Primary Organization Focus (optional)</label>
                            <input type="text" name="orgFocus" class="form-control" id="orgFocus" required>
                        </div>
                        <div class="mb-3">
                            <label for="areaFocus" class="form-label">Area of Focus (optional)</label>
                            <input type="text" name="areaFocus" class="form-control" id="areaFocus" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="secQuestion" class="form-label">Security Question</label>
                            <input type="text" name="secQuestion" class="form-control" id="secQuestion" required>
                        </div>
                        <div class="mb-3">
                            <label for="secAnswer" class="form-label">Answer</label>
                            <input type="text" name="secAnswer" class="form-control" id="secAnswer" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">CREATE ACCOUNT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>