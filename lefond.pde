float a=80;

float b=10;

float x=0;
float y=0;



void setup(){
size (1000,1200);
smooth();
background(0,0);
noStroke();
fill(random(255),random(255),random(255),8);
frameRate(90);
}

void draw (){
//  rotate(x);

  if(x<11){
   translate(width/3,height/2);
//for(int ok=0;ok<2;ok++){
 translate(cos(x)*(x*b),sin(x)*(x*a));
  rotate(x);
  ellipse(0,0,1,1);
  
  ellipse(0,0,abs(sin(x)*(x*b)),cos(x)*(x*a));
//}
  x+=0.01;

  }
}

//(x -2)² + (y -3)² = 40;