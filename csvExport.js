class csvExport {
    constructor(table, header = true) {
      this.table = table;
      this.rows = Array.from(table.querySelectorAll("tr"));
      if (!header && this.rows[0].querySelectorAll("th").length) {
        this.rows.shift();
      }
      // console.log(this.rows);
      // console.log(this._longestRow());
    }
  
    exportCsv() {
      const lines = [];
      const ncols = this._longestRow();
      for (const row of this.rows) {
        let line = "";
        for (let i = 0; i < ncols; i++) {
          if (row.children[i] !== undefined) {
            line += csvExport.safeData(row.children[i]);
          }
          line += i !== ncols - 1 ? "," : "";
        }
        lines.push(line);
      }
      //console.log(lines);
      return lines.join("\n");
    }
    _longestRow() {
      return this.rows.reduce((length, row) => (row.childElementCount > length ? row.childElementCount : length), 0);
    }
    static safeData(td) {
      let data = td.textContent;
      //Replace all double quote to two double quotes
      data = data.replace(/"/g, `""`);
      //Replace , and \n to double quotes
      data = /[",\n"]/.test(data) ? `"${data}"` : data;
      return data;
    }
  }
  
  const btnExport = document.getElementById("btnExport");
  const tableElement = document.getElementById("table");
  
  function csv(){
    const obj = new csvExport(tableElement);
    const csvData = obj.exportCsv();
    const blob = new Blob([csvData], { type: "text/csv" });
    const url = URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url;
    a.download = "file.csv";
    a.click();
  
    setTimeout(() => {
      URL.revokeObjectURL(url);
    }, 500);
  };
  // let CSV = document.getElementById('fileUpload'); 
  //   CSV.addEventListener('change', (event) => { 
  //       const file = event.target.files[0]; 
  //       const reader = new FileReader(); 
      
  //       reader.onload = (e) => { 
  //           const content = e.target.result; 
  //           const rows = content.split('\n') 
  //               .map(row => row.split(',')); 
      
  //           const table =  
  //               document.getElementById('table'); 
  //           table.innerHTML = ''; 
      
  //           for (let i = 0; i < rows.length; i++) { 
  //               let tr = document.createElement('tr'); 
  //               for (let j = 0; j < rows[i].length; j++) { 
  //                   let td = document.createElement('td'); 
  //                   td.textContent = rows[i][j]; 
  //                   tr.appendChild(td);} 
  //               table.appendChild(tr);} 
  //           CSV.style.display = 'none'; 
  //           button.style.display = 'block';}; 
      
  //       reader.readAsText(file); 
  //   }); 
