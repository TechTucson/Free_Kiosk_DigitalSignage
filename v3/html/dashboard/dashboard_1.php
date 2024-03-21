 <div class="field">
    <div class="f-wrapper">
       <select id="roleSel" class="cbx" tabindex="50" name="role">
	      <option value="empty">Which Player Do We Need To Work On?</option>
              <option value="student">A Student</option>
              <option value="educator">An Educator</option>
              <option value="parent">A parent signing up for my child</option>
              <option value="not-school">Not in school but still learning</option>
              <option value="publisher">A Publisher or interested Kno partner</option>
       </select>
    </div>
 </div>
<div id="student" class="hidden">Student div</div>
<div id="educator" class="hidden">Educator div</div>
<div id="parent" class="hidden">Student div</div>
<div id="not-school" class="hidden">Not School div</div>
<div id="publisher" class="hidden">Student div</div>
<script>
var ids=["student", "educator", "parent", "not-school", "publisher"];
var dropDown = document.getElementById("roleSel");

dropDown.onchange = function(){
for(var x = 0; x < ids.length; x++){   document.getElementById(ids[x]).style.display="none";
}    document.getElementById(this.value).style.display = "block";
}
</script>
<style>
.hidden{
    display: none;
}
</style>
