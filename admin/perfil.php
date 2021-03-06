<?php include "components/header.php"; ?>
      <div class="content">
          <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Nova Categoria</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="michael23">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Company" value="Chet">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="Melbourne">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="Australia">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Criar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title"> Todas as Categorias</h4>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table">
                                  <thead class=" text-primary">
                                  <th>
                                      Name
                                  </th>
                                  <th>
                                      Country
                                  </th>
                                  <th>
                                      City
                                  </th>
                                  <th class="text-right">
                                      Salary
                                  </th>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>
                                          Dakota Rice
                                      </td>
                                      <td>
                                          Niger
                                      </td>
                                      <td>
                                          Oud-Turnhout
                                      </td>
                                      <td class="text-right">
                                          $36,738
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Minerva Hooper
                                      </td>
                                      <td>
                                          Curaçao
                                      </td>
                                      <td>
                                          Sinaai-Waas
                                      </td>
                                      <td class="text-right">
                                          $23,789
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Sage Rodriguez
                                      </td>
                                      <td>
                                          Netherlands
                                      </td>
                                      <td>
                                          Baileux
                                      </td>
                                      <td class="text-right">
                                          $56,142
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Philip Chaney
                                      </td>
                                      <td>
                                          Korea, South
                                      </td>
                                      <td>
                                          Overland Park
                                      </td>
                                      <td class="text-right">
                                          $38,735
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Doris Greene
                                      </td>
                                      <td>
                                          Malawi
                                      </td>
                                      <td>
                                          Feldkirchen in Kärnten
                                      </td>
                                      <td class="text-right">
                                          $63,542
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Mason Porter
                                      </td>
                                      <td>
                                          Chile
                                      </td>
                                      <td>
                                          Gloucester
                                      </td>
                                      <td class="text-right">
                                          $78,615
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Jon Porter
                                      </td>
                                      <td>
                                          Portugal
                                      </td>
                                      <td>
                                          Gloucester
                                      </td>
                                      <td class="text-right">
                                          $98,615
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
<?php include "components/footer.php"; ?>