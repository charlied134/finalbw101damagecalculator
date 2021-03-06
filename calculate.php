
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <span class="navbar-brand logo">Wizard101 Calculator</span>
    <button type="button" class="btn btn-warning" id="bread">Bread</button>
  </nav>

  <div class="container mt-5 calculator">

    <h1>Wizard 101 Damage and Resist Calculator</h1>

    <hr>

    <div class="row mt-4">

      <div class="col-md">
        <h2>Character Stats</h2>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><img src="images/damage.png" alt="Damage">Damage</span>
          </div>
          <input type="text" class="form-control field" id="dmg">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><img src="images/resist.png" alt="Resist">Resist</span>
          </div>
          <input type="text" class="form-control field" id="res">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><img src="images/pierce.png" alt="Pierce">Pierce</span>
          </div>
          <input type="text" class="form-control field" id="prc">
        </div>

      </div>

      <div class="col-md">
        <h2>PvE Multipliers</h2>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Outgoing</span>
          </div>
          <input type="text" class="form-control field" id="pve-out" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Incoming</span>
          </div>
          <input type="text" class="form-control field" id="pve-in" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Total</span>
          </div>
          <input type="text" class="form-control field" id="pve-tot" disabled>
        </div>

      </div>

      <div class="col-md">
        <h2>PvP Multipliers</h2>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Outgoing</span>
          </div>
          <input type="text" class="form-control field" id="pvp-out" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Incoming</span>
          </div>
          <input type="text" class="form-control field" id="pvp-in" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Total</span>
          </div>
          <input type="text" class="form-control field" id="pvp-tot" disabled>
        </div>

      </div>

      <div class="row m-auto">
        <button type="button" class="btn btn-success col-sm m-1" id="calc">Calculate</button>
        <button type="button" class="btn btn-danger col-sm m-1" id="reset">Reset</button>
      </div>
    </div>

    <hr>

    <div>

      <h2>How to Use:</h2>
      <ul>

        <li>Input attacker's damage and pierce and defender's resist stats to calculate damage multipliers</li>
        <li>All inputs must be positive</li>
        <li>Spell damage will be base damage times the relevent total multiplier (PvE or PvP)</li>
        <li>Note that you must account for unrounded pet stat values for the most precise results (the rounded values
          that display on the character stat page will give a very good approximation)</li>

      </ul>

    </div>

    <hr>

    <div>

      <h6>This calculator was created by Charlie (<a href="https://twitter.com/charlied134?lang=en"
          target="_blank">@charlied134</a>) at Final Bastion (<a href="http://www.finalbastion.com/"
          target="_blank">finalbastion.com</a>) and Juan Crowthorn.</h6>

      <p>See this article for more information about the calculator: <a
          href="https://finalbastion.com/wizard101-guides/w101-analysis/damage-resist-and-pierce-spring-2021/"
          target="_blank">Damage, Resist, and Pierce Wizard101 Spring Update 2021</a>.</p>

    </div>

    <div class="bread-box"></div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <script src="calculate.js"></script>

