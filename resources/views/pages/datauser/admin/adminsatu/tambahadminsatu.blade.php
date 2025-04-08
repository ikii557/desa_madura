@extends('layouts.app')
@section('main')


<div class="page-inner">
    <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Tambah admin</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="largeInput">masukan nama lengkap</label>
                          <input
                            type="text"
                            class="form-control form-control"
                            id="defaultInput"
                            placeholder="masukan nama lengkap"
                          />
                        </div>
                        <div class="form-group">
                          <label for="largeInput">masukan nik lengkap</label>
                          <input
                            type="text"
                            class="form-control form-control"
                            id="defaultInput"
                            placeholder="masukan nik lengkap"
                          />
                        </div>
                        <div class="form-group">
                          <label for="largeInput">masukan kk lengkap</label>
                          <input
                            type="text"
                            class="form-control form-control"
                            id="defaultInput"
                            placeholder="masukan kk lengkap"
                          />
                        </div>
                        <div class="form-group">
                          <label>Gender</label><br />
                          <div class="d-flex">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault1"
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault2"
                                checked
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault2"
                              >
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group">
                          <label for="comment">alamat</label>
                          <textarea class="form-control" id="comment" rows="5">
                          </textarea>
                        </div>
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault"
                          />
                          <label
                            class="form-check-label"
                            for="flexCheckDefault"
                          >
                            Agree with terms and conditions
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Recipient's username"
                              aria-label="Recipient's username"
                              aria-describedby="basic-addon2"
                            />
                            <span class="input-group-text" id="basic-addon2"
                              >@gmail.com</span
                            >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                          />
                        </div>
                        <div class="form-group">
                          <label for="defaultSelect">role</label>
                          <select
                            class="form-select form-control"
                            id="defaultSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        
                        
                        
                        
                        <div class="form-group">
                          <label for="">masukan no hp</label>
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              aria-label="Text input with dropdown button"
                            />
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-icon">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Search for..."
                            />
                            <span class="input-icon-addon">
                              <i class="fa fa-search"></i>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-icon">
                            <span class="input-icon-addon">
                              <i class="fa fa-user"></i>
                            </span>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Username"
                            />
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <label class="mb-3"><b>Form Group Default</b></label>
                        <div class="form-group form-group-default">
                          <label>Input</label>
                          <input
                            id="Name"
                            type="text"
                            class="form-control"
                            placeholder="Fill Name"
                          />
                        </div>
                        <div class="form-group form-group-default">
                          <label>Select</label>
                          <select
                            class="form-select"
                            id="formGroupDefaultSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <label class="mt-3 mb-3"
                          ><b>Form Floating Label</b></label
                        >
                        <div class="form-floating form-floating-custom mb-3">
                          <input
                            type="email"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                          />
                          <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                          <select
                            class="form-select"
                            id="selectFloatingLabel"
                            required
                          >
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                          <label for="selectFloatingLabel">Select</label>
                        </div>

                        <div class="form-group">
                          <label for="largeInput">Large Input</label>
                          <input
                            type="text"
                            class="form-control form-control-lg"
                            id="largeInput"
                            placeholder="Large Input"
                          />
                        </div>
                        <div class="form-group">
                          <label for="largeInput">Default Input</label>
                          <input
                            type="text"
                            class="form-control form-control"
                            id="defaultInput"
                            placeholder="Default Input"
                          />
                        </div>
                        <div class="form-group">
                          <label for="smallInput">Small Input</label>
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            id="smallInput"
                            placeholder="Small Input"
                          />
                        </div>
                        <div class="form-group">
                          <label for="largeSelect">Large Select</label>
                          <select
                            class="form-select form-control-lg"
                            id="largeSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="defaultSelect">Default Select</label>
                          <select
                            class="form-select form-control"
                            id="defaultSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="smallSelect">Small Select</label>
                          <select
                            class="form-select form-control-sm"
                            id="smallSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
</div>

@endsection