from Crypto.Util.number import *
from flag import flag

p = getPrime(1024)
q = getPrime(1024)

n = p * q
e = 65537

f = (p+q)*p

phi = (p-1)*(q-1)
d = inverse(e,phi)
c = pow(bytes_to_long(flag),e,n)

print("n: ",n)
print("f: ",f)
print("c: ",c)