{extends file='../../BaseTemplate.tpl'}
{block name=body}
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-5 panel twocol">
                <h2>Explanation of the data format</h2>
                <h2>Upload format</h2>
                <p>
                    Your upload has to have the following format (zip file):
                    <pre>
zip file/
├── sat/
|   └── [conversation]/
|           ├── label.json
|           └── log.json
└── dsat/
    └── [conversation]/
            ├── label.json
            └── log.json
</pre></p>
                </div>
                
                <div class="col-md-5 panel twocol">
                    <h2>Option to upload converstations</h2>
                    {if strlen($resultmsg) > 0}
                        {$resultmsg}
                    {/if}
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="div_line">
                                Select the conversations to upload:
                                <input type="file" name="zipfile" id="zipfile">
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
