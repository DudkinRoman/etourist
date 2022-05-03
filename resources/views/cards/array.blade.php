let words={!!json_encode($data)!!};
let eng=new Array;
let rus=new Array;
let eng0=new Array;
let rus0=new Array;
let mem=new Array;
words.forEach((item, i) => {
      eng[i]=item.word;
      eng0[i]=item.word;
      rus[i]=item.difination;
      rus0[i]=item.difination;
      mem[i]=item.mem;
  });
