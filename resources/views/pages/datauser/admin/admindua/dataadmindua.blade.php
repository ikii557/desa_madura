@extends('layouts.app')
@section('main')

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">admin 2</h3>
                <h6 class="op-7 mb-2">sekarang anda dalam admin 2</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manager</a>
                <a href="tambahadminsatu" class="btn btn-primary btn-round"><i class="fa fa-plus"></i> Add Customer</a>
                
              </div>
            </div>
<div class="row">
              <div class="col-md-4">
                <div class="card card-info card-annoucement card-round">
                  <div class="card-body text-center">
                    <div class="card-opening">Welcome Rian,</div>
                    <div class="card-desc">
                      Congrats and best wishes for success in your brand new
                      life! I knew that you would do this!
                    </div>
                    <div class="card-detail">
                      <div class="btn btn-light btn-rounded">View Detail</div>
                    </div>
                  </div>
                </div>
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-title fw-mediumbold">Suggested People</div>
                    <div class="card-list">
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="assets/img/jm_denis.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Jimmy Denis</div>
                          <div class="status">Graphic Designer</div>
                        </div>
                        <button
                          class="btn btn-icon btn-primary btn-round btn-xs"
                        >
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="assets/img/chadengle.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Chad</div>
                          <div class="status">CEO Zeleaf</div>
                        </div>
                        <button
                          class="btn btn-icon btn-primary btn-round btn-xs"
                        >
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="assets/img/talha.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Talha</div>
                          <div class="status">Front End Designer</div>
                        </div>
                        <button
                          class="btn btn-icon btn-primary btn-round btn-xs"
                        >
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-post card-round">
                  <img
                    class="card-img-top"
                    src="assets/img/blogpost.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="avatar">
                        <img
                          src="assets/img/profile2.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <div class="info-post ms-2">
                        <p class="username">Joko Subianto</p>
                        <p class="date text-muted">20 Jan 18</p>
                      </div>
                    </div>
                    <div class="separator-solid"></div>
                    <p class="card-category text-info mb-1">
                      <a href="#">Design</a>
                    </p>
                    <h3 class="card-title">
                      <a href="#"> Best Design Resources This Week </a>
                    </h3>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary btn-rounded btn-sm"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-profile">
                  <div
                    class="card-header"
                    style="background-image: url('assets/img/blogpost.jpg')"
                  >
                    <div class="profile-picture">
                      <div class="avatar avatar-xl">
                        <img
                          src="assets/img/profile.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-profile text-center">
                      <div class="name">Hizrian, 19</div>
                      <div class="job">Frontend Developer</div>
                      <div class="desc">A man who hates loneliness</div>
                      <div class="social-media">
                        <a
                          class="btn btn-info btn-twitter btn-sm btn-link"
                          href="#"
                        >
                          <span class="btn-label just-icon"
                            ><i class="icon-social-twitter"></i>
                          </span>
                        </a>
                        <a
                          class="btn btn-primary btn-sm btn-link"
                          rel="publisher"
                          href="#"
                        >
                          <span class="btn-label just-icon"
                            ><i class="icon-social-facebook"></i>
                          </span>
                        </a>
                        <a
                          class="btn btn-danger btn-sm btn-link"
                          rel="publisher"
                          href="#"
                        >
                          <span class="btn-label just-icon"
                            ><i class="icon-social-instagram"></i>
                          </span>
                        </a>
                      </div>
                      <div class="view-profile">
                        <a href="#" class="btn btn-secondary w-100"
                          >View Full Profile</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row user-stats text-center">
                      <div class="col">
                        <div class="number">125</div>
                        <div class="title">Post</div>
                      </div>
                      <div class="col">
                        <div class="number">25K</div>
                        <div class="title">Followers</div>
                      </div>
                      <div class="col">
                        <div class="number">134</div>
                        <div class="title">Following</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection