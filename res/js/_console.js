var _DT = new Date(); 

class CustomLogging {
  constructor(title) {
    this.title = {
      body: title || "[" + _DT.toString() + "]\n\t",
      color: "darkgrey",
      size: "8pt"
    };

    this.body = {
      color: "#008f68",
      size: "1rem"
    };
  }

  setTitleStyle({ color, size }) {
    if (color !== undefined) this.title.color = color;
    if (size !== undefined) this.title.size = size;
  }

  setBodyStyle({ color, size }) {
    if (color !== undefined) this.body.color = color;
    if (size !== undefined) this.body.size = size;
  }

  log(body = "") {
    // the second line is now the body because the first references the content after the first %c for the title
    console.log(
      `%c${this.title.body} %c${body}`,
      `color: ${this.title.color}; font-weight: bold; font-size: ${
        this.title.size
      };`,
      `color: ${this.body.color}; font-weight: bold; font-size: ${
        this.body.size
      }; text-shadow: 0 0 5px rgba(0,0,0,0.2);`
    );
    
    return this;
  }
}

const _log = new CustomLogging();
_log.setBodyStyle({ color: 'green', size: '10pt' });

const _logErr = new CustomLogging();
_logErr.setBodyStyle({ color: 'red', size: '1.5rem' });


_log.log('K1ng Z00f welcomes you to ADKST.org');
//_logErr.log('Something bad happened!');
//console.log('\n--END OF _console.js--');


