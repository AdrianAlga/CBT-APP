@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/table.css') }}">
@endpush

@section('body')
  @include('components.navbarAdmin')
  @include('components.spasi')
  <div class="page-wrapper">
    <div class="page-breadcrumb">
      <!-- alerts -->
      <div id="alerts"></div>
      <!-- Profile -->
      <section id="headerProduk" style="height: 75vh;">
        <div class="container-fluid card py-4 h-100">
          <div class="row">
            <div class="col-md-8">
              <div class="container-fluid">
                <div class="row p-3">
                  <div class="col-md-12">
                    <h3>Profile</h3>
                    <p>Menambah, Mengedit, atau Menghapus Siswa</p>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah
                      Siswa</button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 p-4">
                    <div class="table-responsive">
                      <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th class="col-md-4">Nisn</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-4">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>
                              <a href="#"><span class="badge text-bg-info" id="liveAlertBtn">Informasi</span></a>
                              <a href="#"><span class="badge text-bg-warning px-4"
                                  id="liveAlertBtn2">Edit</span></a>
                              <a href="#"><span class="badge text-bg-danger" id="liveAlertBtn3">Delete</span></a>
                            </td>
                          </tr>
                          <tr>
                            <td>60200676</td>
                            <td>Dilla</td>
                            <td>
                              <button style=" border: none;background: none; padding: 0"><span class="badge text-bg-info"
                                  data-bs-toggle="modal" data-bs-target="#informasi">Informasi</span></button>
                              <button style=" border: none;background: none; padding: 0"><span
                                  class="badge text-bg-warning px-4" data-bs-toggle="modal"
                                  data-bs-target="#edit">Edit</span></button>
                              <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal"
                                  data-bs-target="#hapus">Delete</span></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- Modal Tambah Siswa-->
                      <form action="">
                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" required />
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Nisn</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" required />
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Password</label>
                                  <div class="input-group">
                                    <input type="password" class="form-control" id="passwordInput" required>
                                    <span class="input-group-append">
                                      <span class="input-group-text toggle-password" id="togglePassword"
                                        style="cursor: pointer">
                                        <i class="bi bi-eye-fill" alt="Show Password" id="eyeClosedIcon"></i>
                                        <i class="bi bi-eye-slash" alt="Hide Password" id="eyeOpenIcon"
                                          style="display: none;"></i>
                                      </span>
                                    </span>
                                  </div>
                                </div>
                                <select class="form-select" aria-label="Default select example">
                                  <option selected>Pilih Sekolah</option>
                                  <option value="1">SMAN 17 Gowa</option>
                                  <option value="1">SMAN 1 Gowa</option>
                                  <option value="2">SMP 1 Gowa</option>
                                  <option value="2">SMP 2 Gowa</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- Modal Edit Siswa-->
                      <form action="">
                        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Siswa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Username</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" required />
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Password</label>
                                  <div class="input-group">
                                    <input type="password" class="form-control" id="passwordInput2" required>
                                    <span class="input-group-append">
                                      <span class="input-group-text toggle-password" id="togglePassword2"
                                        style="cursor: pointer">
                                        <i class="bi bi-eye-fill" alt="Show Password" id="eyeClosedIcon2"></i>
                                        <i class="bi bi-eye-slash" alt="Hide Password" id="eyeOpenIcon2"
                                          style="display: none;"></i>
                                      </span>
                                    </span>
                                  </div>
                                </div>
                                <select class="form-select" aria-label="Default select example">
                                  <option selected>Pilih Sekolah</option>
                                  <option value="1">SMP 1 Gowa</option>
                                  <option value="2">SMP 2 Gowa</option>
                                  <option value="3">SMA 1 gowa</option>
                                  <option value="4">SMA 2 gowa</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      {{-- Informasi --}}
                      <div class="modal fade" id="informasi" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div>
                                      <span> Nama : </span>
                                      <span> Dilla </span>
                                    </div>
                                    <br>
                                    <div>
                                      <span> Nisn : </span>
                                      <span> 863782353 </span>
                                    </div>
                                    <br>
                                    <div>
                                      <span> Password : </span>
                                      <span> dilla123 </span>
                                    </div>
                                    <br>
                                    <div>
                                      <span> Sekolah : </span>
                                      <span> SMA 1 Gowa </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal Hapus-->
                      <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus?</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">Apakah anda yakin ingin menghapusnya?</div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                              <button type="button" class="btn btn-primary">Ya</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 gambar1">
              <div class="container h-100">
                <div class="row align-items-center h-100">
                  <div class="col-md-12">
                    <img src="{{ asset('/images/student.svg') }}" alt="img" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer text-center">
      © 2023 CBT Online by <a
        href="https://l.instagram.com/?u=http%3A%2F%2Fbit.ly%2F3UaE7in&e=AT0IbESTXiAOKa7dxGjRS7TwV1mU3eagwftwzG-WUCjc6a8XKAWg_czE-a9qrlrI9tTvLMe5y4ckTmhdMcbKBXki7cKHOUaoYvnoa9s">Adrian.com</a>
    </footer>
  </div>

  @push('script')
    <script src="{{ asset('/js/alerts.js') }}"></script>
    <script src="{{ asset('/js/password.js') }}"></script>
  @endpush
@endsection
