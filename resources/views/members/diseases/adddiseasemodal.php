<div id="addDiseaseModal" tabindex="-1" aria-labelledby="addDiseaseModalLabel" aria-hidden="true" class="_31P-8 _3bCgx">
  <div class="_28U8K _2h0Jb">
    <div class="_2M5QZ _1wCNj _3LA0v _1HTfk s0VLt">
      <form method="POST" id="newDiseaseForm" onsubmit="sulaiForm({this:this,event:event,link:this.action,method:'POST'})">
        <div class="_3tByX _1jkJg">
          <button type="button" data-dismiss="modal" aria-label="Close" class="_2yuh-"></button>
          <div class="_1dTWr _3x-l5 _1HqFl _3mxtc">
            <h5 class="_3znGg">Add New <strong>Diseases</strong></h5>
          </div>

          <div class="_3Sail">
            <div class="_18uPx _14vxW _3e0Cs _2kea1 _3x-l5">
              <svg width="24" height="24" fill="currentColor" class="_2i-WK">
                <use xlink:href="<?= ROOT ?>/assets/bootstrap-icons/bootstrap-icons.svg#patch-exclamation-fll" />
              </svg>
              <h6 for="diseasename" class="_10lSW _1x6Xu"><strong>Disease Name</strong></h6>
            </div>
            <div class="_3BRUK">
              <div class="_2E95Y riVBJ">
                <input id="diseasename" name="diseasename" type="text" data-length="50" class="_1y8Oi _1GV_i" />
                <label for="diseasename">Disease</label>
                <span data-error="" data-success="" class="_25Y7w"></span>
              </div>
            </div>
          </div>

          <div class="_3Sail">
            <div class="_18uPx _14vxW _3e0Cs _2kea1 _3x-l5">
              <svg width="24" height="24" fill="currentColor" class="_2i-WK">
                <use xlink:href="<?= ROOT ?>/assets/bootstrap-icons/bootstrap-icons.svg#journal-text" />
              </svg>
              <h6 for="diseasedesc" class="_10lSW _1x6Xu"><strong>Description</strong></h6>
            </div>
            <div class="_3BRUK">
              <div class="_2E95Y riVBJ">
                <textarea id="diseasedesc" name="diseasedesc" type="text" data-length="500" class="_1y8Oi _142t1 _1GV_i"></textarea>
                <label for="diseasedesc">Description</label>
                <span data-error="" data-success="" class="_25Y7w"></span>
              </div>
            </div>
          </div>

          <div class="_3Sail">
            <div class="_18uPx _14vxW _3e0Cs _2kea1 _3x-l5">
              <svg width="24" height="24" fill="currentColor" class="_2i-WK">
                <use xlink:href="<?= ROOT ?>/assets/bootstrap-icons/bootstrap-icons.svg#clipboard-check" />
              </svg>
              <h6 for="diseasesolution" class="_10lSW _1x6Xu"><strong>Solution</strong></h6>
            </div>
            <div class="_3BRUK">
              <div class="_2E95Y riVBJ">
                <textarea id="diseasesolution" name="diseasesolution" type="text" data-length="500" class="_1y8Oi _142t1 _1GV_i"></textarea>
                <label for="diseasesolution">Solution</label>
                <span data-error="" data-success="" class="_25Y7w"></span>
              </div>
            </div>
          </div>

          <div class="_3Sail _3x-l5 riVBJ gqtmr">
            <div class="_-1QSV _3HVzZ _1dTWr _1JVHC">
              <button type="button" data-dismiss="modal" class="_2niE6 _2-EzS">Close</button>
              <button type="submit" class="_2niE6 _2SF1n _2-EzS _1dYc3 _1dTWr _2kea1 _3x-l5">
                <span style="width: 1rem; height: 1rem" role="status" class="_8sneY _2f2YP _14vxW"></span>
                <span>Add Disease</span>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>