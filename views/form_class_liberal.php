    <input type="hidden" name="class_type" value="liberal" />
    
    <span>學年期：</span>
    <select name="v_year">
        <?php year_opt_printer("0951",  "1021");?>
    </select>
    <span>通識分類：</span>
    <select name="v_subject">
        <option value=""></option>
        <option selected="" value="E">人文領域</option>
        <option value="F">社會科學領域</option>
        <option value="G">自然科學領域</option>
        <option value="3">大學國文</option>
        <option value="8">大一英文</option>
        <option value="2">一般通識(舊制)</option>
        <option value="9">歷史與社會(舊制)</option>
        <option value="A">新制通識(97-98學年度)</option>
    </select>
    <span>通識學群：</span>
    <select name="v_group">
        <option value=""></option>
        <option value="GEHL">文學學群</option>
        <option value="GEHH">歷史學群</option>
        <option value="GEHP">哲學學群</option>
        <option value="GEHA">藝術學群</option>
        <option value="GEHC">文化學群</option>
    </select>    
    <input type="hidden" name="v_check" value="1" />