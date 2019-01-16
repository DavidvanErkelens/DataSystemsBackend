{extends file='../../BaseTemplate.tpl'}
{block name=body}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 panel twocol">
                <h2>Explanation of the data format</h2>
                <p>This is some text.</p>
                </div>
                
                <div class="col-md-5 panel twocol">
                    <h2>Option to upload converstations</h2>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="div_line">
                            Select the conversations to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="div_line">
                            <input type="submit" value="Upload conversations" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{/block}
