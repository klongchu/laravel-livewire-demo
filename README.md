https://docs.google.com/document/d/1oRNVwrCe-StLwCCpKY-LsQzNzZ5qxd1z3m65uAJ3T-E/edit?tab=t.0


## Deploy

docker build -t provider-test .

---

## Run
docker run -d -p 8080:8080 provider-test
