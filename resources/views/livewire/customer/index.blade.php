<div>
            
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
            </ol>
        </nav>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-8">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-title">New Customers</h6>
                    <div id="new-customers"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-4">
                        <h6 class="card-title mb-0">Customer Rating</h6>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="display-6">3.0</div>
                        <div class="d-flex justify-content-center gap-3 my-3">
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-warning"></i>
                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                            <i class="bi bi-star-fill icon-lg text-muted"></i>
                            <span>(318)</span>
                        </div>
                    </div>
                    <div class="text-muted d-flex align-items-center justify-content-center">
                        <span class="text-success me-3 d-block">
                            <i class="bi bi-arrow-up me-1 small"></i>+35
                        </span> Point from last month
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6 m-auto">
                            <div id="customer-rating"></div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-download"></i> Download Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex">
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown"
                       class="btn btn-primary dropdown-toggle"
                       aria-haspopup="true" aria-expanded="false">Actions</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="customers">
            <thead>
            <tr>
                <th>
                    <input class="form-check-input select-all" type="checkbox" data-select-all-target="#customers" id="defaultCheck1">
                </th>
                <th>ID</th>
                <th>Photo</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Country</th>
                <th>Date</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#1</a>
                </td>
                <td>
                    <div class="avatar avatar-info">
                        <span class="avatar-text rounded-circle">A</span>
                    </div>
                </td>
                <td>Arlan Pond</td>
                <td>apond0@nytimes.com</td>
                <td>Brazil</td>
                <td>1/11/2021</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#2</a>
                </td>
                <td>
                    <div class="avatar avatar-secondary">
                        <span class="avatar-text rounded-circle">B</span>
                    </div>
                </td>
                <td>Billi Cicero</td>
                <td>bcicero1@wiley.com</td>
                <td>Indonesia</td>
                <td>11/20/2020</td>
                <td>
                    <span class="badge bg-danger">Passive</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#3</a>
                </td>
                <td>
                    <div class="avatar avatar-warning">
                        <span class="avatar-text rounded-circle">T</span>
                    </div>
                </td>
                <td>Thorpe Hawksley</td>
                <td>thawksley2@senate.gov</td>
                <td>France</td>
                <td>10/20/2020</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#4</a>
                </td>
                <td>
                    <div class="avatar avatar-danger">
                        <span class="avatar-text rounded-circle">H</span>
                    </div>
                </td>
                <td>Horacio Versey</td>
                <td>hversey3@illinois.edu</td>
                <td>China</td>
                <td>1/15/2021</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#5</a>
                </td>
                <td>
                    <div class="avatar avatar-success">
                        <span class="avatar-text rounded-circle">R</span>
                    </div>
                </td>
                <td>Raphael Dampney</td>
                <td>rdampney4@reference.com</td>
                <td>Portugal</td>
                <td>8/17/2020</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#6</a>
                </td>
                <td>
                    <div class="avatar avatar-info">
                        <span class="avatar-text rounded-circle">A</span>
                    </div>
                </td>
                <td>Arlan Pond</td>
                <td>apond0@nytimes.com</td>
                <td>Brazil</td>
                <td>1/11/2021</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#7</a>
                </td>
                <td>
                    <div class="avatar avatar-secondary">
                        <span class="avatar-text rounded-circle">B</span>
                    </div>
                </td>
                <td>Billi Cicero</td>
                <td>bcicero1@wiley.com</td>
                <td>Indonesia</td>
                <td>11/20/2020</td>
                <td>
                    <span class="badge bg-danger">Passive</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#8</a>
                </td>
                <td>
                    <div class="avatar avatar-warning">
                        <span class="avatar-text rounded-circle">T</span>
                    </div>
                </td>
                <td>Thorpe Hawksley</td>
                <td>thawksley2@senate.gov</td>
                <td>France</td>
                <td>10/20/2020</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#9</a>
                </td>
                <td>
                    <div class="avatar avatar-danger">
                        <span class="avatar-text rounded-circle">H</span>
                    </div>
                </td>
                <td>Horacio Versey</td>
                <td>hversey3@illinois.edu</td>
                <td>China</td>
                <td>1/15/2021</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">#10</a>
                </td>
                <td>
                    <div class="avatar avatar-success">
                        <span class="avatar-text rounded-circle">R</span>
                    </div>
                </td>
                <td>Raphael Dampney</td>
                <td>rdampney4@reference.com</td>
                <td>Portugal</td>
                <td>8/17/2020</td>
                <td>
                    <span class="badge bg-success">Active</span>
                </td>
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Show</a>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
