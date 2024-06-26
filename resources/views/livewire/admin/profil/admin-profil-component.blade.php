<div>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard - Les Biens immobiliers</h1> 
    </div>
    <div class="container-md">
            <div class="row">
              <div class="col-md-3">
                <div class="cardbox">
                  <div class="cardbox-heading text-bold">Personal Settings</div>
                  <div class="list-group"><a class="list-group-item active" href="#tabSetting1" data-toggle="tab">Profile</a><a class="list-group-item" href="#tabSetting2" data-toggle="tab">Account</a><a class="list-group-item" href="#tabSetting3" data-toggle="tab">Emails</a><a class="list-group-item" href="#tabSetting4" data-toggle="tab">Notifications</a><a class="list-group-item" href="#tabSetting5" data-toggle="tab">Applications</a></div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="tab-content p0 b0">
                  <div class="tab-pane active" id="tabSetting1">
                    <div class="cardbox">
                      <div class="cardbox-heading text-bold">Profile</div>
                      <div class="cardbox-body">
                        <form action="#">
                          <div class="form-group">
                            <p>Picture</p>
                            <label class="custom-file">
                              <input class="custom-file-input" id="file" type="file"><span class="custom-file-control"></span>
                            </label>
                          </div>
                          <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text">
                          </div>
                          <div class="form-group">
                            <label>Bio</label>
                            <textarea class="form-control" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label>URL</label>
                            <input class="form-control" type="text">
                          </div>
                          <div class="form-group">
                            <label>Company</label>
                            <input class="form-control" type="text">
                          </div>
                          <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" type="text">
                          </div>
                          <button class="btn btn-info" type="button">Update settings</button>
                          <p><small class="text-muted">* Integer fermentum accumsan metus, id sagittis ipsum molestie vitae</small></p>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tabSetting2">
                    <div class="cardbox">
                      <div class="cardbox-heading text-bold">Account</div>
                      <div class="cardbox-body">
                        <form action="#">
                          <div class="form-group">
                            <label>Current password</label>
                            <input class="form-control" type="password">
                          </div>
                          <div class="form-group">
                            <label>New password</label>
                            <input class="form-control" type="password">
                          </div>
                          <div class="form-group">
                            <label>Confirm new password</label>
                            <input class="form-control" type="password">
                          </div>
                          <button class="btn btn-info" type="button">Update password</button>
                          <p><small class="text-muted">* Integer fermentum accumsan metus, id sagittis ipsum molestie vitae</small></p>
                        </form>
                      </div>
                    </div>
                    <div class="cardbox">
                      <div class="cardbox-heading bg-danger text-bold">Delete account</div>
                      <div class="cardbox-body bt">
                        <p>You will be asked for confirmation before delete account.</p>
                        <button class="btn btn-secondary" type="button"><span class="text-danger">Delete account</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tabSetting3">
                    <div class="cardbox">
                      <div class="cardbox-heading text-bold">Emails</div>
                      <div class="cardbox-body">
                        <p>Etiam eros nibh, condimentum in auctor et, aliquam quis elit. Donec id libero eros. Ut fringilla, justo id fringilla pretium, nibh nunc suscipit mauris, et suscipit nulla nisl ac dolor. Nam egestas, leo eu gravida tincidunt, sem ipsum pellentesque quam, vel iaculis est quam et eros.</p>
                        <p><strong>Your email addresses</strong></p>
                        <p><span class="mr-2">email@someaddress.com</span><span class="badge badge-success">primary</span></p>
                        <p><span class="mr-2">another.email@someaddress.com</span><span class="badge bg-blue-grey-500">private</span></p>
                      </div>
                      <div class="cardbox-body bt">
                        <p><strong>Add email address</strong></p>
                        <form action="#">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <div class="input-group">
                                  <input class="form-control" type="email" placeholder="email@server.com"><span class="input-group-append">
                                    <button class="btn btn-secondary" type="button">Add</button></span>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" id="keepmail" type="checkbox">
                                  <label class="custom-control-label" for="keepmail">Keep my email address private</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-info" type="button">Update email</button>
                          <p><small class="text-muted">* Integer fermentum accumsan metus, id sagittis ipsum molestie vitae</small></p>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tabSetting4">
                    <form action="#">
                      <div class="cardbox">
                        <div class="cardbox-heading text-bold">Notifications</div>
                        <div class="cardbox-body bb">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="somecheck1" type="checkbox">
                              <label class="custom-control-label" for="somecheck1">Disable email notifications</label>
                            </div>
                          </div>
                        </div>
                        <div class="cardbox-body">
                          <p><strong>Interaction</strong></p>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="somecheck2" type="checkbox">
                              <label class="custom-control-label" for="somecheck2">Alert me when someone start to follow me</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="somecheck3" type="checkbox">
                              <label class="custom-control-label" for="somecheck3">Alert me when someone star my work</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="somecheck4" type="checkbox">
                              <label class="custom-control-label" for="somecheck4">Alert me when post a new comment</label>
                            </div>
                          </div>
                          <p><strong>Marketing</strong></p>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="somecheck5" type="checkbox">
                              <label class="custom-control-label" for="somecheck5">Send me news and interesting updates</label>
                            </div>
                          </div>
                          <button class="btn btn-info" type="button">Update notifications</button>
                          <p><small class="text-muted">Mauris sodales accumsan erat, ut dapibus erat faucibus vitae.</small></p>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="tabSetting5">
                    <div class="cardbox">
                      <div class="cardbox-heading text-bold">Applications</div>
                      <div class="cardbox-body">
                        <p><span>You have granted access for </span><strong>3 applications </strong><span>to your account.</span></p>
                        <ul class="list-group">
                          <li class="list-group-item clearfix">
                            <div class="float-left mr-3"><img class="img-responsive thumb48" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAABC1BMVEX29vbBwcGhoaE7OztISEj09PQ/Pz/39/f5+flPT0/i4uL4+PjExMRtbW2Hh4dmZmZaWlr19fX6+vpRUVFHR0fx8fFNTU3o6Oj7+/tDQ0OGhobj4+NAQEBLS0vFxcU+Pj7p6elGRkbs7Ozy8vKEhIRERES3t7fJyck8PDw6Ojrr6+vn5+fc3NzKyspSUlJCQkLw8PBiYmKCgoJlZWXa2tqkpKTu7u7q6urAwMBra2tYWFhKSkrGxsZVVVW5ubmQkJDb29ve3t7Hx8e2trbU1NTLy8uenp7t7e2fn5+np6doaGjW1ta+vr5OTk6Li4tUVFSZmZl3d3dbW1vR0dGqqqr8/Pxqamrl5eXm5ubLJ6+JAAABZUlEQVR42u3U2VLCMBSA4aAtSQ0CSSq2lBbKjrLvCLjv+67v/yTazuhFp0iid06+207/057JBEiSJP1vGC3C+b4VGUfCjA8w4ICubmq11TA1/RDxfMBt9LkSc2ZOLKBypE8IBMtAmFbyBn0xDCOwAIMkeypPIK5sIlLu3udQ4MlGMsEZyNFB1sx0ziDwEIhFA1uFHYVp2Qoi/lLaFhIPTBmLNrwAwWrX3keiv3BRNbOdIfTmk2JGZ3UqEPCXGIkPRtifnzaZpjTrSCiAIcKUeqdKLWa0T7rWp0IBQCC0AMBq0dQ8TGn2qVAAUqdUpiTtzfe586EqEkCOrui7ey32FUhN3wQCiMZKNku5ivYtldrmD+TQtW77s38ZyBfmOtP+EmjfmUqA676rAkf5IbEe8DoZeQHe+wCGoOSxxxdozay1ENaTfUkgWAqflKrRUNVsGQMO8Ph8JdRpA0LAAy0EgSRJkvSDD9deLc38u9AVAAAAAElFTkSuQmCC" alt="App"></div>
                            <div class="float-right">
                              <button class="btn btn-secondary" type="button"><strong>Revoke</strong></button>
                            </div>
                            <p class="text-bold mb-0">Application #1</p><small>Ut turpis urna, tristique sed adipiscing nec, luctus quis leo.</small>
                          </li>
                          <li class="list-group-item clearfix">
                            <div class="float-left mr-3"><img class="img-responsive thumb48" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAABC1BMVEX29vbBwcGhoaE7OztISEj09PQ/Pz/39/f5+flPT0/i4uL4+PjExMRtbW2Hh4dmZmZaWlr19fX6+vpRUVFHR0fx8fFNTU3o6Oj7+/tDQ0OGhobj4+NAQEBLS0vFxcU+Pj7p6elGRkbs7Ozy8vKEhIRERES3t7fJyck8PDw6Ojrr6+vn5+fc3NzKyspSUlJCQkLw8PBiYmKCgoJlZWXa2tqkpKTu7u7q6urAwMBra2tYWFhKSkrGxsZVVVW5ubmQkJDb29ve3t7Hx8e2trbU1NTLy8uenp7t7e2fn5+np6doaGjW1ta+vr5OTk6Li4tUVFSZmZl3d3dbW1vR0dGqqqr8/Pxqamrl5eXm5ubLJ6+JAAABZUlEQVR42u3U2VLCMBSA4aAtSQ0CSSq2lBbKjrLvCLjv+67v/yTazuhFp0iid06+207/057JBEiSJP1vGC3C+b4VGUfCjA8w4ICubmq11TA1/RDxfMBt9LkSc2ZOLKBypE8IBMtAmFbyBn0xDCOwAIMkeypPIK5sIlLu3udQ4MlGMsEZyNFB1sx0ziDwEIhFA1uFHYVp2Qoi/lLaFhIPTBmLNrwAwWrX3keiv3BRNbOdIfTmk2JGZ3UqEPCXGIkPRtifnzaZpjTrSCiAIcKUeqdKLWa0T7rWp0IBQCC0AMBq0dQ8TGn2qVAAUqdUpiTtzfe586EqEkCOrui7ey32FUhN3wQCiMZKNku5ivYtldrmD+TQtW77s38ZyBfmOtP+EmjfmUqA676rAkf5IbEe8DoZeQHe+wCGoOSxxxdozay1ENaTfUkgWAqflKrRUNVsGQMO8Ph8JdRpA0LAAy0EgSRJkvSDD9deLc38u9AVAAAAAElFTkSuQmCC" alt="App"></div>
                            <div class="float-right">
                              <button class="btn btn-secondary" type="button"><strong>Revoke</strong></button>
                            </div>
                            <p class="text-bold mb-0">Application #2</p><small>Ut turpis urna, tristique sed adipiscing nec, luctus quis leo.</small>
                          </li>
                          <li class="list-group-item clearfix">
                            <div class="float-left mr-3"><img class="img-responsive thumb48" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAABC1BMVEX29vbBwcGhoaE7OztISEj09PQ/Pz/39/f5+flPT0/i4uL4+PjExMRtbW2Hh4dmZmZaWlr19fX6+vpRUVFHR0fx8fFNTU3o6Oj7+/tDQ0OGhobj4+NAQEBLS0vFxcU+Pj7p6elGRkbs7Ozy8vKEhIRERES3t7fJyck8PDw6Ojrr6+vn5+fc3NzKyspSUlJCQkLw8PBiYmKCgoJlZWXa2tqkpKTu7u7q6urAwMBra2tYWFhKSkrGxsZVVVW5ubmQkJDb29ve3t7Hx8e2trbU1NTLy8uenp7t7e2fn5+np6doaGjW1ta+vr5OTk6Li4tUVFSZmZl3d3dbW1vR0dGqqqr8/Pxqamrl5eXm5ubLJ6+JAAABZUlEQVR42u3U2VLCMBSA4aAtSQ0CSSq2lBbKjrLvCLjv+67v/yTazuhFp0iid06+207/057JBEiSJP1vGC3C+b4VGUfCjA8w4ICubmq11TA1/RDxfMBt9LkSc2ZOLKBypE8IBMtAmFbyBn0xDCOwAIMkeypPIK5sIlLu3udQ4MlGMsEZyNFB1sx0ziDwEIhFA1uFHYVp2Qoi/lLaFhIPTBmLNrwAwWrX3keiv3BRNbOdIfTmk2JGZ3UqEPCXGIkPRtifnzaZpjTrSCiAIcKUeqdKLWa0T7rWp0IBQCC0AMBq0dQ8TGn2qVAAUqdUpiTtzfe586EqEkCOrui7ey32FUhN3wQCiMZKNku5ivYtldrmD+TQtW77s38ZyBfmOtP+EmjfmUqA676rAkf5IbEe8DoZeQHe+wCGoOSxxxdozay1ENaTfUkgWAqflKrRUNVsGQMO8Ph8JdRpA0LAAy0EgSRJkvSDD9deLc38u9AVAAAAAElFTkSuQmCC" alt="App"></div>
                            <div class="float-right">
                              <button class="btn btn-secondary" type="button"><strong>Revoke</strong></button>
                            </div>
                            <p class="text-bold mb-0">Application #3</p><small>Ut turpis urna, tristique sed adipiscing nec, luctus quis leo.</small>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
