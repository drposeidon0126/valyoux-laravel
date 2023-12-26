  <div class="col-xl-4 col-sm-6">
      <div class="card">
          <div class="row">
              <div class="col-xl-5">
                  <div class="text-center p-4 border-right">
                      <div class="avatar-sm mx-auto mb-4">
                          <span class="avatar-title rounded-circle {{ $avatarClass }} font-size-16">
                              {{ $avatar }}
                          </span>
                      </div>
                      <h5 class="text-truncate">{{ $title }}</h5>
                  </div>
              </div>

              <div class="col-xl-7">
                  <div class="p-4 text-center text-xl-left">
                      <div class="row">
                          <div class="col-sm-6">
                              <div>
                                  <p class="text-muted mb-2 text-truncate">Products</p>
                                  <h5>{{ $products }}</h5>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div>
                                  <p class="text-muted mb-2 text-truncate">Wallet Balance</p>
                                  <h5>{{ $wbalance }}</h5>
                              </div>
                          </div>
                      </div>
                      <div class="mt-4">
                          <a href="#">See profile</a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>