<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@extends('layouts.app')

@section('content')



{{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <center>
                <div class="card-header">You can write anything about today's Event Program!</div> {{-- The Card title--}}
              </center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- You are logged in! --}} {{-- Login successful message--}}

                    {{-- <h1> You can write anything about today's Event Program! </h1> {{-- The start of my evaluation sheet--}}

                    <fieldset>
                      <center>{{-- Centering the titles--}}
                      <legend>Today's Event</legend>
                      </center>
                  <p>
                  <label for="rating">
            How would you rate today's program?
          </label>
          </p>
                    <select name="rating">
                      <option value="10">10</option>
                      <option value="9">9</option>
                      <option value="8">8</option>
                      <option value="7">7</option>
                      <option value="6">6</option>
                      <option value="5">5</option>
                      <option value="4">4</option>
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1">1</option>
                    </select>

                  <p>Were you hyped by today's program?</p>
                    <select name="rating">
                      <option value="10">10</option>
                      <option value="9">9</option>
                      <option value="8">8</option>
                      <option value="7">7</option>
                      <option value="6">6</option>
                      <option value="5">5</option>
                      <option value="4">4</option>
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1">1</option>
                    </select>

                    <p>What was the single best part of today's program?</P>

                      <input type="radio" name ="best_part" value="The food was good" checked="checked" /> The food was good <br />
                      <input type="radio" name ="best_part" value="The faciliatator was interactive" /> The faciliatator was interactive <br />
                      <input type="radio" name ="best_part" value="The learning material were on-point" /> The learning material were on-point <br />
                      <input type="radio" name ="best_part" value="You learned new material today" /> You learned new material today <br />
                    </p>

                    <p>What was your worst experience today?</p>
                    <textarea name="worst" cols="20" row="4"> Enter your comments... </textarea>
                  </form>
                </fieldset>

                <fieldset>
                  <center>
                  <legend>The House</legend>
                  </center>
                  <p>Were you satisfied with the house?</P>

                    <input type="radio" name ="house_satisfaction" value="Yes" checked="checked" /> Yes <br />
                    <input type="radio" name ="house_satisfaction" value="No" /> No <br />
                  </p>

                      <p>Any Problems?</p>
                      <textarea name="comments" cols="20" row="4"> Share them.. </textarea>
                    </form>

                    <p>How was the quality of food?</p>
                      <select name="rating">
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                      </select>

                      <p>Was there a large enough selection of food?</P>

                        <input type="radio" name ="food_selection" value="Heaps of choices" checked="checked" /> Heaps of choices <br />
                        <input type="radio" name ="food_selection" value="Adequate range" /> Adequate range <br />
                        <input type="radio" name ="food_selection" value="Some choices, but not what I wanted" /> Some choices, but not what I wanted <br />
                        <input type="radio" name ="food_selection" value="Not enough" /> Not enough <br />
                      </p>

                      <p>In your honest opinion, what are some of the most important changes you want to be made?</p>
                      <textarea name="comments" cols="20" row="4"> ... </textarea>
                    </form>
                  </fieldset>

                  <fieldset>
                    <center>
                    <legend>Final Thoughts</legend>
                    </center>
                    <p>Any other suggestions?</p>
                    <textarea name="comments" cols="20" row="4"> Final comments.. </textarea>
                  </form>
                </fieldset>
<br />
                    <p>Name:
                      <input type="text" name="name" size="15" maxlength="50" required="required"/>
                    </p>

                    <input type="submit" value="Submit Evalution" /> {{-- The submit button--}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
