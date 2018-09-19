@extends('layouts.app')
@section('content')
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

        <section id="content">
          <div>
            <div class="row">
                <div class="col-lg-12" align="center">
                    <h3>Search a user you want to send to.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <input type="search" id="search" value="" class="form-control" placeholder="Search for user">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table" id="table">
                      <br>
                        <tbody>
                          @foreach($users as $user)
                          <tr>
                              <td>{{ $user->name }}</td>
                              <td><button class="btn btn-primary" data-toggle="modal" data-target="#{{ $loop->iteration }}">View profile</button></td>
                          </tr>

                          <!-- Modal -->
                          <div class="modal fade" id="{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="{{ $loop->iteration }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body" align="center">
                                  <p style="text-transform: capitalize">{{ $user->name }}</p>
                                  <p>{{ $user->email }}</p>

                                  <form>
                                    <div class="form-group">
                                      <label for="amount">Amount</label>
                                      <input type="number" class="form-control" id="amount" placeholder="Amount to send">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach

                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
        </div>

        <script>
          $(document).ready(function(){
            $("#search").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#table tr").filter(function() {
                console.log('this', this);
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
      </section>
@endsection
